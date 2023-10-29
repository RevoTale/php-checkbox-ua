<?php

declare(strict_types=1);

namespace RevoTale\CheckboxUA\Normalizer;

use ArrayObject;
use RevoTale\CheckboxUA\Runtime\Normalizer\{CheckArray, ValidatorTrait};
use Symfony\Component\Serializer\Normalizer\{DenormalizerAwareInterface, DenormalizerAwareTrait, DenormalizerInterface, NormalizerAwareInterface, NormalizerAwareTrait, NormalizerInterface};
use Jane\Component\JsonSchemaRuntime\Reference;
use RevoTale\CheckboxUA\Model\SrsoSchemaReceiptSchemaGoodModel;
use RevoTale\CheckboxUA\Model\SrsoSchemaGoodSchemaGoodModel;
use RevoTale\CheckboxUA\Model\WebhookInfoSchema;
use RevoTale\CheckboxUA\Model\WebhookInfoResponseSchema;
use RevoTale\CheckboxUA\Model\ValidationError;
use RevoTale\CheckboxUA\Model\UpdateTransactionPayload;
use RevoTale\CheckboxUA\Model\TransactionModel;
use RevoTale\CheckboxUA\Model\TaxModel;
use RevoTale\CheckboxUA\Model\ShortTransaction;
use RevoTale\CheckboxUA\Model\ShortReceiptModel;
use RevoTale\CheckboxUA\Model\ShortOrganizationModel;
use RevoTale\CheckboxUA\Model\ShortCloseShiftPayloadReport;
use RevoTale\CheckboxUA\Model\ShortCloseShiftPayload;
use RevoTale\CheckboxUA\Model\ShiftWithCashierModel;
use RevoTale\CheckboxUA\Model\ShiftWithCashierAndCashRegister;
use RevoTale\CheckboxUA\Model\ShiftWithCashRegisterModel;
use RevoTale\CheckboxUA\Model\ShiftUpdateSchema;
use RevoTale\CheckboxUA\Model\ShiftTaxModel;
use RevoTale\CheckboxUA\Model\ShiftModel;
use RevoTale\CheckboxUA\Model\SetupRatesPayload;
use RevoTale\CheckboxUA\Model\SetWebhookPayload;
use RevoTale\CheckboxUA\Model\SetIntegrationPayload;
use RevoTale\CheckboxUA\Model\ServiceReceiptUpdateSchema;
use RevoTale\CheckboxUA\Model\ServiceCurrencyPayload;
use RevoTale\CheckboxUA\Model\ServiceCurrencyItemPayload;
use RevoTale\CheckboxUA\Model\ReportWithExtensionPayloadShort;
use RevoTale\CheckboxUA\Model\ReportTaxesPayload;
use RevoTale\CheckboxUA\Model\ReportTaxesModel;
use RevoTale\CheckboxUA\Model\ReportTaskSchema;
use RevoTale\CheckboxUA\Model\ReportPaymentsPayload;
use RevoTale\CheckboxUA\Model\ReportPaymentsModel;
use RevoTale\CheckboxUA\Model\ReportPayload;
use RevoTale\CheckboxUA\Model\ReportModel;
use RevoTale\CheckboxUA\Model\ReceiptUpdateSchema;
use RevoTale\CheckboxUA\Model\ReceiptServicePayload;
use RevoTale\CheckboxUA\Model\ReceiptSellPayload;
use RevoTale\CheckboxUA\Model\ReceiptModel;
use RevoTale\CheckboxUA\Model\ReceiptDeliverySmsPayload;
use RevoTale\CheckboxUA\Model\ReceiptConfigPayload;
use RevoTale\CheckboxUA\Model\PublicReportTaskSchema;
use RevoTale\CheckboxUA\Model\PaginationMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultShortTransactionMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultShortTransaction;
use RevoTale\CheckboxUA\Model\PaginatedResultShiftWithCashRegisterModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultShiftWithCashRegisterModel;
use RevoTale\CheckboxUA\Model\PaginatedResultShiftModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultShiftModel;
use RevoTale\CheckboxUA\Model\PaginatedResultReportModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultReportModel;
use RevoTale\CheckboxUA\Model\PaginatedResultReceiptModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultReceiptModel;
use RevoTale\CheckboxUA\Model\PaginatedResultOrderModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultOrderModel;
use RevoTale\CheckboxUA\Model\PaginatedResultGoodModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultGoodModel;
use RevoTale\CheckboxUA\Model\PaginatedResultDetailedCashRegisterModelMeta;
use RevoTale\CheckboxUA\Model\PaginatedResultDetailedCashRegisterModel;
use RevoTale\CheckboxUA\Model\OrganizationReceiptConfigSchema;
use RevoTale\CheckboxUA\Model\OrganizationModel;
use RevoTale\CheckboxUA\Model\OrganizationBillingSchema;
use RevoTale\CheckboxUA\Model\OrderUpdateSchema;
use RevoTale\CheckboxUA\Model\OrderReceiptModel;
use RevoTale\CheckboxUA\Model\OrderModel;
use RevoTale\CheckboxUA\Model\OrderGoodItemModelGood;
use RevoTale\CheckboxUA\Model\OrderGoodItemModel;
use RevoTale\CheckboxUA\Model\OrderGoodDetailsModel;
use RevoTale\CheckboxUA\Model\OrderDeliveryDetailsModel;
use RevoTale\CheckboxUA\Model\OperationErrorModel;
use RevoTale\CheckboxUA\Model\OperationBaseResponseSchema;
use RevoTale\CheckboxUA\Model\OfflineReceiptSellPayload;
use RevoTale\CheckboxUA\Model\OfflineCodesCountSchema;
use RevoTale\CheckboxUA\Model\ObsoleteCardPaymentPayload;
use RevoTale\CheckboxUA\Model\NotificationPayload;
use RevoTale\CheckboxUA\Model\IntegrationInfoSchema;
use RevoTale\CheckboxUA\Model\IntegrationInfoResponseSchema;
use RevoTale\CheckboxUA\Model\IntegrationEditOrderReceiptSchema;
use RevoTale\CheckboxUA\Model\HTTPValidationError;
use RevoTale\CheckboxUA\Model\HTTPError;
use RevoTale\CheckboxUA\Model\GoodTax;
use RevoTale\CheckboxUA\Model\GoodModelBase;
use RevoTale\CheckboxUA\Model\GoodItemPayloadGood;
use RevoTale\CheckboxUA\Model\GoodItemPayload;
use RevoTale\CheckboxUA\Model\GoodItemModel;
use RevoTale\CheckboxUA\Model\GoodDetailsPayload;
use RevoTale\CheckboxUA\Model\GoOfflinePayload;
use RevoTale\CheckboxUA\Model\ExtendedTaxModel;
use RevoTale\CheckboxUA\Model\ExtendedReportPayloadShort;
use RevoTale\CheckboxUA\Model\ExtendedReportFiltersPayload;
use RevoTale\CheckboxUA\Model\ExtendedReceiptReportFiltersPayload;
use RevoTale\CheckboxUA\Model\DocumentsStateModel;
use RevoTale\CheckboxUA\Model\DiscountPayload;
use RevoTale\CheckboxUA\Model\DiscountModel;
use RevoTale\CheckboxUA\Model\DetailedOfflineFiscalCodeModel;
use RevoTale\CheckboxUA\Model\DetailedCashierModel;
use RevoTale\CheckboxUA\Model\DetailedCashRegisterModel;
use RevoTale\CheckboxUA\Model\DeliveryPayload;
use RevoTale\CheckboxUA\Model\DeleteWebhookSchema;
use RevoTale\CheckboxUA\Model\DeleteIntegrationSchema;
use RevoTale\CheckboxUA\Model\DailyCashFlowPayload;
use RevoTale\CheckboxUA\Model\CurrencySchema;
use RevoTale\CheckboxUA\Model\CurrencyRatePayload;
use RevoTale\CheckboxUA\Model\CurrencyRateModel;
use RevoTale\CheckboxUA\Model\CurrencyPayload;
use RevoTale\CheckboxUA\Model\CurrencyExchangeSchema;
use RevoTale\CheckboxUA\Model\CurrencyExchangePayload;
use RevoTale\CheckboxUA\Model\CreateShiftPayload;
use RevoTale\CheckboxUA\Model\CreateOrderModel;
use RevoTale\CheckboxUA\Model\CloseShiftPayloadReport;
use RevoTale\CheckboxUA\Model\CloseShiftPayload;
use RevoTale\CheckboxUA\Model\CheckStatusResponseSchema;
use RevoTale\CheckboxUA\Model\CashierSignatureStatus;
use RevoTale\CheckboxUA\Model\CashierSignInPinCode;
use RevoTale\CheckboxUA\Model\CashierSignIn;
use RevoTale\CheckboxUA\Model\CashierPermissionsModel;
use RevoTale\CheckboxUA\Model\CashierModel;
use RevoTale\CheckboxUA\Model\CashierAccessTokenResponseModel;
use RevoTale\CheckboxUA\Model\CashWithdrawalReceiptPayload;
use RevoTale\CheckboxUA\Model\CashRegisterOfflineTimeStatus;
use RevoTale\CheckboxUA\Model\CashRegisterOfflineTimeSession;
use RevoTale\CheckboxUA\Model\CashRegisterOfflineTime;
use RevoTale\CheckboxUA\Model\CashRegisterModel;
use RevoTale\CheckboxUA\Model\CashRegisterDeviceModel;
use RevoTale\CheckboxUA\Model\CashPaymentPayload;
use RevoTale\CheckboxUA\Model\CardPaymentPayload;
use RevoTale\CheckboxUA\Model\CalculatedReceiptTaxPayload;
use RevoTale\CheckboxUA\Model\CalculatedReceiptSellPayload;
use RevoTale\CheckboxUA\Model\CalculatedGoodTaxPayload;
use RevoTale\CheckboxUA\Model\CalculatedGoodItemPayload;
use RevoTale\CheckboxUA\Model\CalculatedGoodDetailsPayload;
use RevoTale\CheckboxUA\Model\CalculatedDiscountPayload;
use RevoTale\CheckboxUA\Model\BranchModel;
use RevoTale\CheckboxUA\Model\BonusPayload;
use RevoTale\CheckboxUA\Model\BodyImportGoodsFromFileApiV1GoodsImportUploadPost;
use RevoTale\CheckboxUA\Model\BalanceModel;
use RevoTale\CheckboxUA\Model\AddressModel;
use RevoTale\CheckboxUA\Runtime\Normalizer\ReferenceNormalizer;
use RevoTale\CheckboxUA\Normalizer\SrsoSchemaReceiptSchemaGoodModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\SrsoSchemaGoodSchemaGoodModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\WebhookInfoSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\WebhookInfoResponseSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\ValidationErrorNormalizer;
use RevoTale\CheckboxUA\Normalizer\UpdateTransactionPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\TransactionModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\TaxModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShortTransactionNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShortReceiptModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShortOrganizationModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShortCloseShiftPayloadReportNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShortCloseShiftPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShiftWithCashierModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShiftWithCashierAndCashRegisterNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShiftWithCashRegisterModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShiftUpdateSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShiftTaxModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ShiftModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\SetupRatesPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\SetWebhookPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\SetIntegrationPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ServiceReceiptUpdateSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\ServiceCurrencyPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ServiceCurrencyItemPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportWithExtensionPayloadShortNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportTaxesPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportTaxesModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportTaskSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportPaymentsPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportPaymentsModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReportModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReceiptUpdateSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReceiptServicePayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReceiptSellPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReceiptModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReceiptDeliverySmsPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ReceiptConfigPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\PublicReportTaskSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginationMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultShortTransactionMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultShortTransactionNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultShiftWithCashRegisterModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultShiftWithCashRegisterModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultShiftModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultShiftModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultReportModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultReportModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultReceiptModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultReceiptModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultOrderModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultOrderModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultGoodModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultGoodModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultDetailedCashRegisterModelMetaNormalizer;
use RevoTale\CheckboxUA\Normalizer\PaginatedResultDetailedCashRegisterModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrganizationReceiptConfigSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrganizationModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrganizationBillingSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderUpdateSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderReceiptModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderGoodItemModelGoodNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderGoodItemModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderGoodDetailsModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OrderDeliveryDetailsModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OperationErrorModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\OperationBaseResponseSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\OfflineReceiptSellPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\OfflineCodesCountSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\ObsoleteCardPaymentPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\NotificationPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\IntegrationInfoSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\IntegrationInfoResponseSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\IntegrationEditOrderReceiptSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\HTTPValidationErrorNormalizer;
use RevoTale\CheckboxUA\Normalizer\HTTPErrorNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoodTaxNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoodModelBaseNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoodItemPayloadGoodNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoodItemPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoodItemModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoodDetailsPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\GoOfflinePayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ExtendedTaxModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\ExtendedReportPayloadShortNormalizer;
use RevoTale\CheckboxUA\Normalizer\ExtendedReportFiltersPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\ExtendedReceiptReportFiltersPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\DocumentsStateModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\DiscountPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\DiscountModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\DetailedOfflineFiscalCodeModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\DetailedCashierModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\DetailedCashRegisterModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\DeliveryPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\DeleteWebhookSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\DeleteIntegrationSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\DailyCashFlowPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CurrencySchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\CurrencyRatePayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CurrencyRateModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CurrencyPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CurrencyExchangeSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\CurrencyExchangePayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CreateShiftPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CreateOrderModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CloseShiftPayloadReportNormalizer;
use RevoTale\CheckboxUA\Normalizer\CloseShiftPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CheckStatusResponseSchemaNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashierSignatureStatusNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashierSignInPinCodeNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashierSignInNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashierPermissionsModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashierModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashierAccessTokenResponseModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashWithdrawalReceiptPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashRegisterOfflineTimeStatusNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashRegisterOfflineTimeSessionNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashRegisterOfflineTimeNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashRegisterModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashRegisterDeviceModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\CashPaymentPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CardPaymentPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CalculatedReceiptTaxPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CalculatedReceiptSellPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CalculatedGoodTaxPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CalculatedGoodItemPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CalculatedGoodDetailsPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\CalculatedDiscountPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\BranchModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\BonusPayloadNormalizer;
use RevoTale\CheckboxUA\Normalizer\BodyImportGoodsFromFileApiV1GoodsImportUploadPostNormalizer;
use RevoTale\CheckboxUA\Normalizer\BalanceModelNormalizer;
use RevoTale\CheckboxUA\Normalizer\AddressModelNormalizer;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [AddressModel::class => AddressModelNormalizer::class, BalanceModel::class => BalanceModelNormalizer::class, BodyImportGoodsFromFileApiV1GoodsImportUploadPost::class => BodyImportGoodsFromFileApiV1GoodsImportUploadPostNormalizer::class, BonusPayload::class => BonusPayloadNormalizer::class, BranchModel::class => BranchModelNormalizer::class, CalculatedDiscountPayload::class => CalculatedDiscountPayloadNormalizer::class, CalculatedGoodDetailsPayload::class => CalculatedGoodDetailsPayloadNormalizer::class, CalculatedGoodItemPayload::class => CalculatedGoodItemPayloadNormalizer::class, CalculatedGoodTaxPayload::class => CalculatedGoodTaxPayloadNormalizer::class, CalculatedReceiptSellPayload::class => CalculatedReceiptSellPayloadNormalizer::class, CalculatedReceiptTaxPayload::class => CalculatedReceiptTaxPayloadNormalizer::class, CardPaymentPayload::class => CardPaymentPayloadNormalizer::class, CashPaymentPayload::class => CashPaymentPayloadNormalizer::class, CashRegisterDeviceModel::class => CashRegisterDeviceModelNormalizer::class, CashRegisterModel::class => CashRegisterModelNormalizer::class, CashRegisterOfflineTime::class => CashRegisterOfflineTimeNormalizer::class, CashRegisterOfflineTimeSession::class => CashRegisterOfflineTimeSessionNormalizer::class, CashRegisterOfflineTimeStatus::class => CashRegisterOfflineTimeStatusNormalizer::class, CashWithdrawalReceiptPayload::class => CashWithdrawalReceiptPayloadNormalizer::class, CashierAccessTokenResponseModel::class => CashierAccessTokenResponseModelNormalizer::class, CashierModel::class => CashierModelNormalizer::class, CashierPermissionsModel::class => CashierPermissionsModelNormalizer::class, CashierSignIn::class => CashierSignInNormalizer::class, CashierSignInPinCode::class => CashierSignInPinCodeNormalizer::class, CashierSignatureStatus::class => CashierSignatureStatusNormalizer::class, CheckStatusResponseSchema::class => CheckStatusResponseSchemaNormalizer::class, CloseShiftPayload::class => CloseShiftPayloadNormalizer::class, CloseShiftPayloadReport::class => CloseShiftPayloadReportNormalizer::class, CreateOrderModel::class => CreateOrderModelNormalizer::class, CreateShiftPayload::class => CreateShiftPayloadNormalizer::class, CurrencyExchangePayload::class => CurrencyExchangePayloadNormalizer::class, CurrencyExchangeSchema::class => CurrencyExchangeSchemaNormalizer::class, CurrencyPayload::class => CurrencyPayloadNormalizer::class, CurrencyRateModel::class => CurrencyRateModelNormalizer::class, CurrencyRatePayload::class => CurrencyRatePayloadNormalizer::class, CurrencySchema::class => CurrencySchemaNormalizer::class, DailyCashFlowPayload::class => DailyCashFlowPayloadNormalizer::class, DeleteIntegrationSchema::class => DeleteIntegrationSchemaNormalizer::class, DeleteWebhookSchema::class => DeleteWebhookSchemaNormalizer::class, DeliveryPayload::class => DeliveryPayloadNormalizer::class, DetailedCashRegisterModel::class => DetailedCashRegisterModelNormalizer::class, DetailedCashierModel::class => DetailedCashierModelNormalizer::class, DetailedOfflineFiscalCodeModel::class => DetailedOfflineFiscalCodeModelNormalizer::class, DiscountModel::class => DiscountModelNormalizer::class, DiscountPayload::class => DiscountPayloadNormalizer::class, DocumentsStateModel::class => DocumentsStateModelNormalizer::class, ExtendedReceiptReportFiltersPayload::class => ExtendedReceiptReportFiltersPayloadNormalizer::class, ExtendedReportFiltersPayload::class => ExtendedReportFiltersPayloadNormalizer::class, ExtendedReportPayloadShort::class => ExtendedReportPayloadShortNormalizer::class, ExtendedTaxModel::class => ExtendedTaxModelNormalizer::class, GoOfflinePayload::class => GoOfflinePayloadNormalizer::class, GoodDetailsPayload::class => GoodDetailsPayloadNormalizer::class, GoodItemModel::class => GoodItemModelNormalizer::class, GoodItemPayload::class => GoodItemPayloadNormalizer::class, GoodItemPayloadGood::class => GoodItemPayloadGoodNormalizer::class, GoodModelBase::class => GoodModelBaseNormalizer::class, GoodTax::class => GoodTaxNormalizer::class, HTTPError::class => HTTPErrorNormalizer::class, HTTPValidationError::class => HTTPValidationErrorNormalizer::class, IntegrationEditOrderReceiptSchema::class => IntegrationEditOrderReceiptSchemaNormalizer::class, IntegrationInfoResponseSchema::class => IntegrationInfoResponseSchemaNormalizer::class, IntegrationInfoSchema::class => IntegrationInfoSchemaNormalizer::class, NotificationPayload::class => NotificationPayloadNormalizer::class, ObsoleteCardPaymentPayload::class => ObsoleteCardPaymentPayloadNormalizer::class, OfflineCodesCountSchema::class => OfflineCodesCountSchemaNormalizer::class, OfflineReceiptSellPayload::class => OfflineReceiptSellPayloadNormalizer::class, OperationBaseResponseSchema::class => OperationBaseResponseSchemaNormalizer::class, OperationErrorModel::class => OperationErrorModelNormalizer::class, OrderDeliveryDetailsModel::class => OrderDeliveryDetailsModelNormalizer::class, OrderGoodDetailsModel::class => OrderGoodDetailsModelNormalizer::class, OrderGoodItemModel::class => OrderGoodItemModelNormalizer::class, OrderGoodItemModelGood::class => OrderGoodItemModelGoodNormalizer::class, OrderModel::class => OrderModelNormalizer::class, OrderReceiptModel::class => OrderReceiptModelNormalizer::class, OrderUpdateSchema::class => OrderUpdateSchemaNormalizer::class, OrganizationBillingSchema::class => OrganizationBillingSchemaNormalizer::class, OrganizationModel::class => OrganizationModelNormalizer::class, OrganizationReceiptConfigSchema::class => OrganizationReceiptConfigSchemaNormalizer::class, PaginatedResultDetailedCashRegisterModel::class => PaginatedResultDetailedCashRegisterModelNormalizer::class, PaginatedResultDetailedCashRegisterModelMeta::class => PaginatedResultDetailedCashRegisterModelMetaNormalizer::class, PaginatedResultGoodModel::class => PaginatedResultGoodModelNormalizer::class, PaginatedResultGoodModelMeta::class => PaginatedResultGoodModelMetaNormalizer::class, PaginatedResultOrderModel::class => PaginatedResultOrderModelNormalizer::class, PaginatedResultOrderModelMeta::class => PaginatedResultOrderModelMetaNormalizer::class, PaginatedResultReceiptModel::class => PaginatedResultReceiptModelNormalizer::class, PaginatedResultReceiptModelMeta::class => PaginatedResultReceiptModelMetaNormalizer::class, PaginatedResultReportModel::class => PaginatedResultReportModelNormalizer::class, PaginatedResultReportModelMeta::class => PaginatedResultReportModelMetaNormalizer::class, PaginatedResultShiftModel::class => PaginatedResultShiftModelNormalizer::class, PaginatedResultShiftModelMeta::class => PaginatedResultShiftModelMetaNormalizer::class, PaginatedResultShiftWithCashRegisterModel::class => PaginatedResultShiftWithCashRegisterModelNormalizer::class, PaginatedResultShiftWithCashRegisterModelMeta::class => PaginatedResultShiftWithCashRegisterModelMetaNormalizer::class, PaginatedResultShortTransaction::class => PaginatedResultShortTransactionNormalizer::class, PaginatedResultShortTransactionMeta::class => PaginatedResultShortTransactionMetaNormalizer::class, PaginationMeta::class => PaginationMetaNormalizer::class, PublicReportTaskSchema::class => PublicReportTaskSchemaNormalizer::class, ReceiptConfigPayload::class => ReceiptConfigPayloadNormalizer::class, ReceiptDeliverySmsPayload::class => ReceiptDeliverySmsPayloadNormalizer::class, ReceiptModel::class => ReceiptModelNormalizer::class, ReceiptSellPayload::class => ReceiptSellPayloadNormalizer::class, ReceiptServicePayload::class => ReceiptServicePayloadNormalizer::class, ReceiptUpdateSchema::class => ReceiptUpdateSchemaNormalizer::class, ReportModel::class => ReportModelNormalizer::class, ReportPayload::class => ReportPayloadNormalizer::class, ReportPaymentsModel::class => ReportPaymentsModelNormalizer::class, ReportPaymentsPayload::class => ReportPaymentsPayloadNormalizer::class, ReportTaskSchema::class => ReportTaskSchemaNormalizer::class, ReportTaxesModel::class => ReportTaxesModelNormalizer::class, ReportTaxesPayload::class => ReportTaxesPayloadNormalizer::class, ReportWithExtensionPayloadShort::class => ReportWithExtensionPayloadShortNormalizer::class, ServiceCurrencyItemPayload::class => ServiceCurrencyItemPayloadNormalizer::class, ServiceCurrencyPayload::class => ServiceCurrencyPayloadNormalizer::class, ServiceReceiptUpdateSchema::class => ServiceReceiptUpdateSchemaNormalizer::class, SetIntegrationPayload::class => SetIntegrationPayloadNormalizer::class, SetWebhookPayload::class => SetWebhookPayloadNormalizer::class, SetupRatesPayload::class => SetupRatesPayloadNormalizer::class, ShiftModel::class => ShiftModelNormalizer::class, ShiftTaxModel::class => ShiftTaxModelNormalizer::class, ShiftUpdateSchema::class => ShiftUpdateSchemaNormalizer::class, ShiftWithCashRegisterModel::class => ShiftWithCashRegisterModelNormalizer::class, ShiftWithCashierAndCashRegister::class => ShiftWithCashierAndCashRegisterNormalizer::class, ShiftWithCashierModel::class => ShiftWithCashierModelNormalizer::class, ShortCloseShiftPayload::class => ShortCloseShiftPayloadNormalizer::class, ShortCloseShiftPayloadReport::class => ShortCloseShiftPayloadReportNormalizer::class, ShortOrganizationModel::class => ShortOrganizationModelNormalizer::class, ShortReceiptModel::class => ShortReceiptModelNormalizer::class, ShortTransaction::class => ShortTransactionNormalizer::class, TaxModel::class => TaxModelNormalizer::class, TransactionModel::class => TransactionModelNormalizer::class, UpdateTransactionPayload::class => UpdateTransactionPayloadNormalizer::class, ValidationError::class => ValidationErrorNormalizer::class, WebhookInfoResponseSchema::class => WebhookInfoResponseSchemaNormalizer::class, WebhookInfoSchema::class => WebhookInfoSchemaNormalizer::class, SrsoSchemaGoodSchemaGoodModel::class => SrsoSchemaGoodSchemaGoodModelNormalizer::class, SrsoSchemaReceiptSchemaGoodModel::class => SrsoSchemaReceiptSchemaGoodModelNormalizer::class, Reference::class => ReferenceNormalizer::class];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [AddressModel::class => false, BalanceModel::class => false, BodyImportGoodsFromFileApiV1GoodsImportUploadPost::class => false, BonusPayload::class => false, BranchModel::class => false, CalculatedDiscountPayload::class => false, CalculatedGoodDetailsPayload::class => false, CalculatedGoodItemPayload::class => false, CalculatedGoodTaxPayload::class => false, CalculatedReceiptSellPayload::class => false, CalculatedReceiptTaxPayload::class => false, CardPaymentPayload::class => false, CashPaymentPayload::class => false, CashRegisterDeviceModel::class => false, CashRegisterModel::class => false, CashRegisterOfflineTime::class => false, CashRegisterOfflineTimeSession::class => false, CashRegisterOfflineTimeStatus::class => false, CashWithdrawalReceiptPayload::class => false, CashierAccessTokenResponseModel::class => false, CashierModel::class => false, CashierPermissionsModel::class => false, CashierSignIn::class => false, CashierSignInPinCode::class => false, CashierSignatureStatus::class => false, CheckStatusResponseSchema::class => false, CloseShiftPayload::class => false, CloseShiftPayloadReport::class => false, CreateOrderModel::class => false, CreateShiftPayload::class => false, CurrencyExchangePayload::class => false, CurrencyExchangeSchema::class => false, CurrencyPayload::class => false, CurrencyRateModel::class => false, CurrencyRatePayload::class => false, CurrencySchema::class => false, DailyCashFlowPayload::class => false, DeleteIntegrationSchema::class => false, DeleteWebhookSchema::class => false, DeliveryPayload::class => false, DetailedCashRegisterModel::class => false, DetailedCashierModel::class => false, DetailedOfflineFiscalCodeModel::class => false, DiscountModel::class => false, DiscountPayload::class => false, DocumentsStateModel::class => false, ExtendedReceiptReportFiltersPayload::class => false, ExtendedReportFiltersPayload::class => false, ExtendedReportPayloadShort::class => false, ExtendedTaxModel::class => false, GoOfflinePayload::class => false, GoodDetailsPayload::class => false, GoodItemModel::class => false, GoodItemPayload::class => false, GoodItemPayloadGood::class => false, GoodModelBase::class => false, GoodTax::class => false, HTTPError::class => false, HTTPValidationError::class => false, IntegrationEditOrderReceiptSchema::class => false, IntegrationInfoResponseSchema::class => false, IntegrationInfoSchema::class => false, NotificationPayload::class => false, ObsoleteCardPaymentPayload::class => false, OfflineCodesCountSchema::class => false, OfflineReceiptSellPayload::class => false, OperationBaseResponseSchema::class => false, OperationErrorModel::class => false, OrderDeliveryDetailsModel::class => false, OrderGoodDetailsModel::class => false, OrderGoodItemModel::class => false, OrderGoodItemModelGood::class => false, OrderModel::class => false, OrderReceiptModel::class => false, OrderUpdateSchema::class => false, OrganizationBillingSchema::class => false, OrganizationModel::class => false, OrganizationReceiptConfigSchema::class => false, PaginatedResultDetailedCashRegisterModel::class => false, PaginatedResultDetailedCashRegisterModelMeta::class => false, PaginatedResultGoodModel::class => false, PaginatedResultGoodModelMeta::class => false, PaginatedResultOrderModel::class => false, PaginatedResultOrderModelMeta::class => false, PaginatedResultReceiptModel::class => false, PaginatedResultReceiptModelMeta::class => false, PaginatedResultReportModel::class => false, PaginatedResultReportModelMeta::class => false, PaginatedResultShiftModel::class => false, PaginatedResultShiftModelMeta::class => false, PaginatedResultShiftWithCashRegisterModel::class => false, PaginatedResultShiftWithCashRegisterModelMeta::class => false, PaginatedResultShortTransaction::class => false, PaginatedResultShortTransactionMeta::class => false, PaginationMeta::class => false, PublicReportTaskSchema::class => false, ReceiptConfigPayload::class => false, ReceiptDeliverySmsPayload::class => false, ReceiptModel::class => false, ReceiptSellPayload::class => false, ReceiptServicePayload::class => false, ReceiptUpdateSchema::class => false, ReportModel::class => false, ReportPayload::class => false, ReportPaymentsModel::class => false, ReportPaymentsPayload::class => false, ReportTaskSchema::class => false, ReportTaxesModel::class => false, ReportTaxesPayload::class => false, ReportWithExtensionPayloadShort::class => false, ServiceCurrencyItemPayload::class => false, ServiceCurrencyPayload::class => false, ServiceReceiptUpdateSchema::class => false, SetIntegrationPayload::class => false, SetWebhookPayload::class => false, SetupRatesPayload::class => false, ShiftModel::class => false, ShiftTaxModel::class => false, ShiftUpdateSchema::class => false, ShiftWithCashRegisterModel::class => false, ShiftWithCashierAndCashRegister::class => false, ShiftWithCashierModel::class => false, ShortCloseShiftPayload::class => false, ShortCloseShiftPayloadReport::class => false, ShortOrganizationModel::class => false, ShortReceiptModel::class => false, ShortTransaction::class => false, TaxModel::class => false, TransactionModel::class => false, UpdateTransactionPayload::class => false, ValidationError::class => false, WebhookInfoResponseSchema::class => false, WebhookInfoSchema::class => false, SrsoSchemaGoodSchemaGoodModel::class => false, SrsoSchemaReceiptSchemaGoodModel::class => false, Reference::class => false];
    }
}
